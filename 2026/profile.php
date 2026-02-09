<?php

include __DIR__ . '/inc/config.php';

function render_error_page(int $code, string $message): never
{
    global $baseurl, $suffix;
    http_response_code($code);
    $slug = "profile";
    $pagename = "$code Error";
    ?><!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/inc/head.inc.php"; ?>
<body class='text-center hide-background subpage profile'>
<div class="off-canvas-content" data-off-canvas-content>
    <script> var current_navi_item = "program" </script>
    <?php include __DIR__ . "/inc/navigation.inc.php"; ?>
    <?php include __DIR__ . "/inc/header.inc.php"; ?>
    <section class='container hidden' id='main-content'>
        <div class='full-row clearfix lazyload translucent'>
            <section class="grid-container cell grid-y" id='profile'>
                <div class="cell">
                    <h1><?= $code ?></h1>
                    <h3><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></h3>
                    <br>
                    <a href="<?= $baseurl ?>program<?= $suffix ?>">&laquo; Back to program</a>
                </div>
            </section>
        </div>
        <div class='full-row clearfix divider'>&nbsp;</div>
        <?php include __DIR__ . "/inc/contact.inc.php"; ?>
        <?php include __DIR__ . "/inc/footer.inc.php"; ?>
    </section>
</div>
</body>
</html>
<?php
    exit;
}

function poor_mans_markdown(string $str): string
{
    // First, escape HTML entities to prevent XSS
    $str = htmlspecialchars($str, ENT_QUOTES, 'UTF-8');

    $patterns = array(
            '/\*\*(.*?)\*\*/',
            '/\_\_(.*?)\_\_/',
            // Only allow http/https URLs; exclude quotes and parens from URL to prevent attribute injection
            '/\[(.+?)\]\((https?:\/\/[^\)\s"\'<>]+)\)/',
            '/\\\r\\\n/'
    );
    $replacements = array(
            '<b>\1</b>',
            '<i>\1</i>',
            '<a href="\2" rel="noopener noreferrer" target="_blank">\1</a>',
            '<br/>'
    );
    return preg_replace($patterns, $replacements, $str);
}

/*-------------------------
 INPUT VALIDATION
 -----------------------*/
// Check if profile parameter exists
if (!isset($_GET['profile']) || empty($_GET['profile'])) {
    render_error_page(400, "Profile name required");
}

// Sanitize slug: only allow alphanumeric, hyphens, and underscores
$slug = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['profile']);

// Check if sanitization removed everything (invalid input)
if (empty($slug)) {
    render_error_page(400, "Invalid profile name");
}

$schedule_data = json_decode(file_get_contents(__DIR__ . "/inc/schedule.json"), true)["schedule"]["conference"]["days"];
$profile_data = null;

// find the correct event in the data
foreach ($schedule_data as $day) {
    if ($profile_data) break;
    foreach ($day["rooms"] as $room => $roomdata) {
        if ($profile_data) break;
        foreach ($roomdata as $event) {
            if ($event["slug"] === $slug) {
                $profile_data = $event;
            }
        }
    }
}

if ($profile_data == null) {
    render_error_page(404, "Profile not found");
}

/*-------------------------
 Content
 -----------------------*/
$profile_data['abstract'] = poor_mans_markdown($profile_data['abstract']);
$title = (empty($profile_data['title'])) ? "" : "{$profile_data['title']}";
$subtitle = (empty($profile_data['subtitle'])) ? "" : "{$profile_data['subtitle']}";
$content = (empty($profile_data['abstract'])) ? "" : "<div class='synopsis'>" . nl2br($profile_data['abstract']) . "</div>";

/*-------------------------
 Speakers
 -----------------------*/
// schedules-TODO: position, image
if (!empty($profile_data["persons"])) {
    $speakers = "";
    $is_single = (count($profile_data["persons"]) == 1);
    $grid = (!$is_single) ? "grid-x grid-margin-x grid-margin-y" : "";
    $columns = (!$is_single) ? "cell medium-6" : "";
    $single_css = ($is_single) ? "single" : "";

    foreach ($profile_data["persons"] as $key => $value) {
        $name = (empty($value["public_name"])) ? "" : $value["public_name"];
        $position = (empty($value->position)) ? "" : "<span class='profile-speaker-position'>" . $value->position . "</span>";

        // Image or default
        $image_filename = (empty($value["code"])) ? "" : "bio_{$value["code"]}.jpg";
        $image_path = __DIR__ . "/img/bios/{$image_filename}";

        if (!file_exists($image_path) || empty($image_filename)) {
            $image_url = "{$baseurl}img/bios/default.png";
        } else {
            $image_url = "{$baseurl}img/bios/{$image_filename}";
        }

        $image = "<img class='speaker-image' src='{$image_url}' alt='{$name}' loading='lazy'/>";

        $speakers .= "
			<div class='speaker {$single_css} {$columns} text-left'>
				<div class='speaker-container'>
					<div class='flexed-item-container'>
						<div class='image'>{$image}</div>
						<p class=''><span class='profile-speaker-name'>{$name}</span>{$position}</p>
					</div>
				</div>
			</div>";
    }

    $speakers = "<div class='{$grid} speakers text-center'>{$speakers}</div>";
}


?><!DOCTYPE html>
<html lang="en">

<?php

$slug = "profile";
$pagename = "{$title}";
include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage profile'>

<div class="off-canvas-content" data-off-canvas-content>

    <script> var current_navi_item = "program" </script>
    <?php include "inc/navigation.inc.php"; ?>
    <?php include "inc/header.inc.php"; ?>

    <section class='container hidden' id='main-content'>
        <div class='full-row clearfix lazyload translucent'>
            <section class="grid-container cell grid-y" id='profile'>

                <div class="cell">
                    <a id="back-button" onclick="window.history.back()">&laquo; Back</a>
                </div>

                <div class="cell">
                    <h1><?php echo $title; ?></h1>
                    <?php if ($subtitle != "") echo "<h3>{$subtitle}</h3>"; ?>
                    <?php echo $speakers; ?>
                </div>

                <div class="cell text-left">
                    <?php

                    // Profiles on bottom of the page

                    echo "<br>{$content}<br><br>";

                    // schedules-TODO: position, nick(?), some
                    if (!empty($profile_data["persons"])) {
                        $bios = "<hr>\n";
                        foreach ($profile_data["persons"] as $key => $value) {
                            $name = (empty($value["public_name"])) ? "" : htmlspecialchars($value["public_name"], ENT_QUOTES, 'UTF-8');
                            $position = (empty($value->position)) ? "" : ", " . htmlspecialchars($value->position, ENT_QUOTES, 'UTF-8');
                            $bio = (empty($value["biography"])) ? "" : poor_mans_markdown($value["biography"]);
                            $nick = (empty($value->nick)) ? "" : "<div class='profile-nick'><span class='fieldname'>Nick:</span> " . htmlspecialchars($value->nick, ENT_QUOTES, 'UTF-8') . "</div>";

                            $some = "";
                            if (!empty($value->some)) {
                                $some = "<div class='profile-some'>" . htmlspecialchars($value->some, ENT_QUOTES, 'UTF-8') . "</div>";
                            }

                            $bios .= "<span class='larger'>{$name}{$position}</span>\n\n";
                            $bios .= "{$bio}{$nick}{$some}\n\n\n";

                            if (empty($position) && empty($bio)) {
                                $bios = "";
                            }
                        }
                        echo nl2br($bios);
                        echo "<hr>";
                    }
                    ?>
                </div>

                <div class="cell">
                    <br><br>
                    <a id="back-button" onclick="window.history.back()">&laquo; Back</a>
                </div>

            </section>
        </div>

        <div class='full-row clearfix divider'>&nbsp;</div>

        <?php include "inc/contact.inc.php"; ?>
        <?php include "inc/footer.inc.php"; ?>

    </section>

</div>
</body>
</html>