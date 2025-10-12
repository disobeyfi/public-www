(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"disobey_logo_atlas_", frames: [[0,0,1869,353],[0,355,1162,55]]}
];


// symbols:



(lib.CachedTexturedBitmap_1 = function() {
	this.initialize(img.CachedTexturedBitmap_1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,3008,1028);


(lib.CachedTexturedBitmap_2 = function() {
	this.initialize(img.CachedTexturedBitmap_2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,3008,1028);


(lib.Taso0 = function() {
	this.initialize(ss["disobey_logo_atlas_"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.THENORDICSECURITYEVENT = function() {
	this.initialize(ss["disobey_logo_atlas_"]);
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Taso0();
	this.instance.parent = this;
	this.instance.setTransform(-934.5,-176.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-934.5,-176.5,1869,353);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.CachedTexturedBitmap_2();
	this.instance.parent = this;
	this.instance.setTransform(-751.9,-257,0.5,0.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-751.9,-257,1504,514);


// stage content:
(lib.disobey_logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{logo:54,disrupt:119});

	// timeline functions:
	this.frame_42 = function() {
		var _this = this;
		setTimeout( function(){ _this.gotoAndPlay("logo") },3000 );
		_this.stop();
	}
	this.frame_119 = function() {
		var _this = this;
		_this.play();
	}
	this.frame_131 = function() {
		var _this = this;
		
		var random = 1000+( Math.random()*10000 );
		
		
		setTimeout( function(){ _this.gotoAndPlay("disrupt") },random );
		_this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(42).call(this.frame_42).wait(77).call(this.frame_119).wait(12).call(this.frame_131).wait(3));

	// Layer_5 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_23 = new cjs.Graphics().p("Eh9zABkIAAjHMD7nAAAIAADHg");
	var mask_graphics_24 = new cjs.Graphics().p("Eh/rAF/IAAr9MD/XAAAIAAL9g");
	var mask_graphics_25 = new cjs.Graphics().p("EiBWAJ9IAAz5MECtAAAIAAT5g");
	var mask_graphics_26 = new cjs.Graphics().p("EiC1ANeIAA67MEFrAAAIAAa7g");
	var mask_graphics_27 = new cjs.Graphics().p("EiEKAQlMAAAghJMEIVAAAMAAAAhJg");
	var mask_graphics_28 = new cjs.Graphics().p("EiFTATSMAAAgmjMEKnAAAMAAAAmjg");
	var mask_graphics_29 = new cjs.Graphics().p("EiGTAVpMAAAgrRMEMnAAAMAAAArRg");
	var mask_graphics_30 = new cjs.Graphics().p("EiHJAXqMAAAgvTMEOTAAAMAAAAvTg");
	var mask_graphics_31 = new cjs.Graphics().p("EiH4AZYMAAAgyvMEPxAAAMAAAAyvg");
	var mask_graphics_32 = new cjs.Graphics().p("EiIfAazMAAAg1lMEQ/AAAMAAAA1lg");
	var mask_graphics_33 = new cjs.Graphics().p("EiI+Ab9MAAAg35MER9AAAMAAAA35g");
	var mask_graphics_34 = new cjs.Graphics().p("EiJXAc5MAAAg5xMESvAAAMAAAA5xg");
	var mask_graphics_35 = new cjs.Graphics().p("EiJrAdoMAAAg7PMETXAAAMAAAA7Pg");
	var mask_graphics_36 = new cjs.Graphics().p("EiJ6AeLMAAAg8VMET1AAAMAAAA8Vg");
	var mask_graphics_37 = new cjs.Graphics().p("EiKEAekMAAAg9HMEUKAAAMAAAA9Hg");
	var mask_graphics_38 = new cjs.Graphics().p("EiKMAe1MAAAg9pMEUYAAAMAAAA9pg");
	var mask_graphics_39 = new cjs.Graphics().p("EiKQAe/MAAAg99MEUhAAAMAAAA99g");
	var mask_graphics_40 = new cjs.Graphics().p("EiKSAfEMAAAg+HMEUlAAAMAAAA+Hg");
	var mask_graphics_41 = new cjs.Graphics().p("EiKTAfGMAAAg+LMEUnAAAMAAAA+Lg");
	var mask_graphics_42 = new cjs.Graphics().p("EiKTAfGMAAAg+LMEUnAAAMAAAA+Lg");
	var mask_graphics_54 = new cjs.Graphics().p("EiKTAfGMAAAg+LMEUnAAAMAAAA+Lg");
	var mask_graphics_55 = new cjs.Graphics().p("EiAlAecIAAjfIjrAAMAAAg4FIKLAAIABhHIMxAAIAAgMMDxkAAAMAAAA4zInWAAIAAApIm7AAIAACSImpAAIAABJg");
	var mask_graphics_56 = new cjs.Graphics().p("Eh24AdxIAAm+InVAAMAAAgx9IUXAAIABiPIZiAAIAAgXMDOhAAAMAAAAzZIutAAIAABSIt2AAIAAEkItRAAIAACSg");
	var mask_graphics_57 = new cjs.Graphics().p("EhtLAdGIABqdIrAAAMAAAgr1IejAAIAAjXMAmVAAAIAAgiMCrcAAAMAAAAt/I2CAAIAAB8I0xAAIAAG1Iz5AAIAADbg");
	var mask_graphics_58 = new cjs.Graphics().p("EhjdAcbIAAt7IupAAMAAAgluMAouAAAIAAkeMAzGAAAIAAguMCIZAAAMAAAAolI9YAAIAAClI7sAAIAAJII6iAAIAAEjg");
	var mask_graphics_59 = new cjs.Graphics().p("EhZvAbwIAAxaIyUAAIAA/nMAy6AAAIAAllMA/2AAAIAAg5MBlXAAAMAAAAjLMgkvAAAIAADPMginAAAIAALZMghJAAAIAAFsg");
	var mask_graphics_60 = new cjs.Graphics().p("EhQCAbFIAAzEMAq4AAAIAAh1MhA2AAAIAA5fMA9GAAAIAAmtMBCSAAAIAAK/IKVAAIAAsDMBCUAAAIAAdxMgsFAAAIAAD4MgpiAAAIAANrMgnxAAAIAAG1g");
	var mask_graphics_61 = new cjs.Graphics().p("EhGVAaaIAAr4IUBAAIAAL4gA0TScIAAwaIQaAAIAAQagAdsCgIAAu1IO2AAIAAO1gEhf9ACCIAAzXMAklAAAIAATXgEBAtgCBIAA4YIfRAAIAAYYgA4rmZIAAywIfPAAIAASwg");
	var mask_graphics_62 = new cjs.Graphics().p("EhT7AWDIAArVMAoBAAAIAAoMMg8hAAAIAAxTMA5BAAAIAAmQMBHgAAAIAAhBMBQVAAAIAAVVMgpIAAAIAADnMgmxAAAIAAMxMglIAAAIAAGYg");
	var mask_graphics_63 = new cjs.Graphics().p("EhhgARqIAAqwIeAAAIAAj4MgtZAAAIAAvPMAqxAAAIAAksMA1pAAAIAAgwMCBYAAAIAASPI+2AAIAACuI9EAAIAAJkI73AAIAAEyg");
	var mask_graphics_64 = new cjs.Graphics().p("EhvHANTIAApwIqQAAIAAtMIcgAAIAAjJMAjxAAAIAAgfMCyeAAAIAAPLI0kAAIAAB0IzZAAIAAGYIykAAIAADNg");
	var mask_graphics_65 = new cjs.Graphics().p("Eh8tAI6IAAk4IlIAAIAArHIOQAAIAAhkIR4AAIAAgQMDjjAAAIAAMHIqTAAIAAA6IpsAAIAADMIpSAAIAABmg");
	var mask_graphics_66 = new cjs.Graphics().p("EiKTAEjIAApFMEUnAAAIAAJFg");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:null,x:0,y:0}).wait(23).to({graphics:mask_graphics_23,x:1013.3,y:216.075}).wait(1).to({graphics:mask_graphics_24,x:1018.975,y:218.025}).wait(1).to({graphics:mask_graphics_25,x:1024.1,y:219.75}).wait(1).to({graphics:mask_graphics_26,x:1028.625,y:221.325}).wait(1).to({graphics:mask_graphics_27,x:1032.6,y:222.7}).wait(1).to({graphics:mask_graphics_28,x:1036.1,y:223.875}).wait(1).to({graphics:mask_graphics_29,x:1039.125,y:224.95}).wait(1).to({graphics:mask_graphics_30,x:1041.725,y:225.825}).wait(1).to({graphics:mask_graphics_31,x:1043.925,y:226.575}).wait(1).to({graphics:mask_graphics_32,x:1045.75,y:227.2}).wait(1).to({graphics:mask_graphics_33,x:1047.25,y:227.7}).wait(1).to({graphics:mask_graphics_34,x:1048.475,y:228.125}).wait(1).to({graphics:mask_graphics_35,x:1049.4,y:228.45}).wait(1).to({graphics:mask_graphics_36,x:1050.1,y:228.7}).wait(1).to({graphics:mask_graphics_37,x:1050.6,y:228.85}).wait(1).to({graphics:mask_graphics_38,x:1050.95,y:228.975}).wait(1).to({graphics:mask_graphics_39,x:1051.15,y:229.05}).wait(1).to({graphics:mask_graphics_40,x:1051.25,y:229.075}).wait(1).to({graphics:mask_graphics_41,x:1051.3,y:229.1}).wait(1).to({graphics:mask_graphics_42,x:1051.3,y:229.1}).wait(12).to({graphics:mask_graphics_54,x:1051.3,y:229.1}).wait(1).to({graphics:mask_graphics_55,x:1044.575,y:231.375}).wait(1).to({graphics:mask_graphics_56,x:1037.875,y:233.675}).wait(1).to({graphics:mask_graphics_57,x:1031.15,y:235.95}).wait(1).to({graphics:mask_graphics_58,x:1024.45,y:238.225}).wait(1).to({graphics:mask_graphics_59,x:1017.725,y:240.5}).wait(1).to({graphics:mask_graphics_60,x:1011.025,y:242.8}).wait(1).to({graphics:mask_graphics_61,x:1004.3,y:245.075}).wait(1).to({graphics:mask_graphics_62,x:1013.7,y:285.9}).wait(1).to({graphics:mask_graphics_63,x:1023.1,y:326.725}).wait(1).to({graphics:mask_graphics_64,x:1032.5,y:367.55}).wait(1).to({graphics:mask_graphics_65,x:1041.9,y:408.375}).wait(1).to({graphics:mask_graphics_66,x:1051.3,y:449.2}).wait(68));

	// year
	this.instance = new lib.Tween1("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(1020,234);
	this.instance._off = true;

	this.instance_1 = new lib.CachedTexturedBitmap_1();
	this.instance_1.parent = this;
	this.instance_1.setTransform(268.1,-23,0.5,0.5);

	var maskedShapeInstanceList = [this.instance,this.instance_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},23).to({state:[{t:this.instance}]},19).to({state:[{t:this.instance_1}]},40).wait(52));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(23).to({_off:false},0).to({startPosition:0},19,cjs.Ease.quadOut).to({_off:true},40).wait(52));

	// THE_NORDIC_SECURITY_EVENT
	this.instance_2 = new lib.THENORDICSECURITYEVENT();
	this.instance_2.parent = this;
	this.instance_2.setTransform(438,515);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(134));

	// MASK (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	var mask_1_graphics_119 = new cjs.Graphics().p("EiXtASGMAAAgkKMEvbAAAMAAAAkKg");

	this.timeline.addTween(cjs.Tween.get(mask_1).to({graphics:null,x:0,y:0}).wait(119).to({graphics:mask_1_graphics_119,x:979,y:85.75}).wait(3).to({graphics:null,x:0,y:0}).wait(12));

	// Logo_twist
	this.instance_3 = new lib.Taso0();
	this.instance_3.parent = this;
	this.instance_3.setTransform(55,33);
	this.instance_3._off = true;

	var maskedShapeInstanceList = [this.instance_3];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_1;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(119).to({_off:false},0).to({_off:true},3).wait(12));

	// MASK (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	var mask_2_graphics_119 = new cjs.Graphics().p("EiccAPxIAAyvME45AAAIAASvgEibLgGuIAApCME2fAAAIAAJCg");

	this.timeline.addTween(cjs.Tween.get(mask_2).to({graphics:null,x:0,y:0}).wait(119).to({graphics:mask_2_graphics_119,x:1043.275,y:308.975}).wait(3).to({graphics:null,x:0,y:0}).wait(12));

	// year
	this.instance_4 = new lib.Taso0();
	this.instance_4.parent = this;
	this.instance_4.setTransform(85,33);
	this.instance_4._off = true;

	var maskedShapeInstanceList = [this.instance_4];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_2;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(89).to({_off:false},0).to({_off:true},1).wait(1).to({_off:false},0).wait(28).to({x:97},0).wait(3).to({x:85},0).wait(12));

	// Layer_1 (mask)
	var mask_3 = new cjs.Shape();
	mask_3._off = true;
	var mask_3_graphics_73 = new cjs.Graphics().p("EiW9AOiIAAv7MEt7AAAIAAP7gEiRpgKjIAAj+MEoOAAAIAAD+g");
	var mask_3_graphics_74 = new cjs.Graphics().p("EiXEAOvIAAuYMEtWAAAIAAOYgEiIYgEFIp7hhIAAn4IAIAAIAAhQMEoRAAAIAABQIA/AAIAAERIgzAAIAAA9IAVADIAAEAIgxAIg");
	var mask_3_graphics_75 = new cjs.Graphics().p("EiXXAO7IAAs0IMCAAIn0iwIAAkCMDUgAAAIAqgPIHUAAIAqAPMBEnAAAIH2CxIAAECIgqAPIgZAAIAAMkgEiScgFoIAAiPIgtAAIAAkjIAPAAIAAigMEoVAAAIAACgIB9AAIAAEjIhmAAIAACPg");
	var mask_3_graphics_76 = new cjs.Graphics().p("EiXqAPIIAArQIDrAAIAAjpMDWIAAAIAjgWIHXAAIAjAWMBFIAAAIGjEKIAAEFIgjAWIhNAAIAAGUgEiS8gDKIABjYIhEAAIAAk1MErqAAAIAAE1IiYAAIAADYgEiTpgLzIAAjUMEoZAAAIAADUg");
	var mask_3_graphics_77 = new cjs.Graphics().p("EiX9APUIAApsIDHAAIABgeMDXvAAAIAcgeIHcAAIAcAeMBFpAAAIAcAeICVAAIAACeICeCnIAAEHIgcAdIiCAAIAAADgEiTbgAtIAAj+MEoOAAAIAAD+gEiU1gFMIAAlHMEszAAAIAAFHgEiUXgMOIAAjFMEobAAAIAADFg");
	var mask_3_graphics_78 = new cjs.Graphics().p("EiRbASoIjhmOIjUAAIAAoIMErAAAAIAAEBIDLFnIAAEJIgVAlgEiT7gBWIAAj/MEoPAAAIAAD/gEiVrgG9IAAlaMEt8AAAIAAFagEiVGgPwIAAi3MEoeAAAIAAC3g");
	var mask_3_graphics_79 = new cjs.Graphics().p("EiTsAV9Ii1pCIAAjdIiCAAIAAmkMEqaAAAIAAF3IBSAAICnIUIAAEMIgOAsgEiUagCBIAAj+MEoOAAAIAAD+gEiWhgIwIAAlrMEvFAAAIAAFrgEiV0gTTIAAioMEohAAAIAACog");
	var mask_3_graphics_80 = new cjs.Graphics().p("EiV9AZRIhbqiIAAkLMDcoAAAIAHg1IHmAAIAGA1MBHOAAAIBUJtIAAEMIgHA0gEiY3AGiIAAlAMEp1AAAIAAFAgEiU6gCsIAAj+MEoOAAAIAAD+gEiXYgKjIAAl+MEwQAAAIAAF+gEiWjgW2IAAiaMEolAAAIAACag");
	var mask_3_graphics_81 = new cjs.Graphics().p("EiYOAcmIAAwQMDePAAAIAAg8IHqAAIAAA8MBHvAAAIAAQQgEiZKADmIAAjcMEpQAAAIAADcgEiVagDXIAAj+MEoPAAAIAAD+gEiYOgMVIAAmQMExZAAAIAAGQgEiXRgaZIAAiMMEonAAAIAACMg");
	var mask_3_graphics_82 = new cjs.Graphics().p("EiUKAb2IigrEIAAiYMDZ7AAAIALgwIHgAAIALAwMBGWAAAICVKUIAACYIgLAwgEiYOAGuIAAkwMEsAAAAIAAEwgEiUSgCWIABmXIi9AAIAAlIMEvcAAAIAAFIIhUAAIAAGXgEiVygUxIAAnEMErgAAAIAAHEg");
	var mask_3_graphics_83 = new cjs.Graphics().p("EiR8AbGIlAoTIAAiVMDVnAAAIAVgkIHXAAIAWAkMBE9AAAIEqHvIAACVIgWAkgEiZIAJ2IAAmEMEuwAAAIAAGEgEiVAgBUIAAjxIjEAAIAAkAIDEAAIAAlQMEuJAAAIAANBgEiWIgPJIAAr8MEuYAAAIAAL8g");
	var mask_3_graphics_84 = new cjs.Graphics().p("EiQZAaWInfliIAAiSMDRSAAAIAhgYIHNAAIAgAYMBDkAAAIG/FKIAACSIghAYgEiasAM+IAAnYMExfAAAIAAHYgEiWZgATIABhKIjMAAIAAi4IDMAAIAAlMIgxAAIAAw0MExRAAAIAAIgIAlAAIAARig");
	var mask_3_graphics_85 = new cjs.Graphics().p("EiO2AZmIp/ixIAAiPMDM+AAAIAsgMIHDAAIAsAMMBCKAAAIJVClIAACPIgrAMgEicRAQGIAAosME0QAAAIAAIsgEibFACKIAAhwIDUAAIAAkTIgYAAIAA1sME0IAAAIAAEQIATAAIAAWCItvAAIAABdg");
	var mask_3_graphics_86 = new cjs.Graphics().p("EiZyAY2IAAiMMEdsAAAIAACMgEid2ATOIAAqAME3BAAAIAAKAgEicmAFyIAAgoMEnsAAAIAAAogEiZJABuIAA6jME2/AAAIAAajg");
	var mask_3_graphics_87 = new cjs.Graphics().p("EiP3AY2IjUhaIjYAAIkPhzIAAiTIgVgIIiWAAIgZg+IAApCIDsAAIBlgmIkUhyIAAgrIDeAAIBtgtIhmkWIAAlQIhBizIAApZID0AAICXg3IBPAAIAcgKICoAAIIYjDIAlAAIMQkdMEUeAAAIECLHIAAMBImpCaICSAAIA2AVIAAKYI4HJOIjkAAIp6EOg");
	var mask_3_graphics_88 = new cjs.Graphics().p("EiTLAY2IiMi0IjoAAIiNi0Ih6AAIgwgpIAApXIBtAAIhEhVIAAgtIDqAAIAGgHIAAjcIiCh3IAAplID5AAIBlhuIgIAAIASgUICtAAIFlmGIAmAAIIKo6MEanAAAIIEHaIAAMSIiVCkIAAGLIwGScImxAAIiNC0g");
	var mask_3_graphics_89 = new cjs.Graphics().p("EiWeAY2IgXhaIiKAAIg1i0IhmAAIgXhaIg9AAIhIgUIAApsIAZAAIgFgSIAAgvIA4AAIAAngID+AAIAyikIheAAIAKgeICxAAICypJIAnAAIEFtXMEguAAAIMHDtIAAMjIhKD2IAAAhIoDbqIkHAAIgYBag");
	var mask_3_graphics_90 = new cjs.Graphics().p("EiZyAY2IABloIkFAAIAAqAIEEAAIABjcIi1AAIAAgoIC1AAIgBsLIApAAIAAx0ME2/AAAMAAAAxrg");
	var mask_3_graphics_91 = new cjs.Graphics().p("EiZyAY2IABloIkFAAIAAqAIEEAAIABjcIi1AAIAAgoIC1AAIgBsLIApAAIAAx0ME2/AAAMAAAAxrg");

	this.timeline.addTween(cjs.Tween.get(mask_3).to({graphics:null,x:0,y:0}).wait(73).to({graphics:mask_3_graphics_73,x:990.275,y:277.075}).wait(1).to({graphics:mask_3_graphics_74,x:992.175,y:261.325}).wait(1).to({graphics:mask_3_graphics_75,x:995.35,y:245.575}).wait(1).to({graphics:mask_3_graphics_76,x:998.5,y:229.825}).wait(1).to({graphics:mask_3_graphics_77,x:1001.675,y:214.075}).wait(1).to({graphics:mask_3_graphics_78,x:1004.825,y:218.225}).wait(1).to({graphics:mask_3_graphics_79,x:1007.975,y:222.5}).wait(1).to({graphics:mask_3_graphics_80,x:1011.15,y:226.8}).wait(1).to({graphics:mask_3_graphics_81,x:1014.3,y:231.075}).wait(1).to({graphics:mask_3_graphics_82,x:1006.3,y:225.875}).wait(1).to({graphics:mask_3_graphics_83,x:1010.125,y:220.675}).wait(1).to({graphics:mask_3_graphics_84,x:1018.2,y:215.475}).wait(1).to({graphics:mask_3_graphics_85,x:1026.25,y:210.275}).wait(1).to({graphics:mask_3_graphics_86,x:1034.3,y:205.075}).wait(1).to({graphics:mask_3_graphics_87,x:1034.3,y:205.075}).wait(1).to({graphics:mask_3_graphics_88,x:1034.3,y:205.075}).wait(1).to({graphics:mask_3_graphics_89,x:1034.3,y:205.075}).wait(1).to({graphics:mask_3_graphics_90,x:1034.3,y:205.075}).wait(1).to({graphics:mask_3_graphics_91,x:1034.3,y:205.075}).wait(43));

	// Taso_0
	this.instance_5 = new lib.Tween3("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(999.5,209.5);
	this.instance_5._off = true;

	var maskedShapeInstanceList = [this.instance_5];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_3;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(73).to({_off:false},0).wait(15).to({x:1019.5},0).to({_off:true},1).wait(45));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(1075,337.1,891,232.89999999999998);
// library properties:
lib.properties = {
	id: '3D9D021F9473CB4593AFA463F0E4DADF',
	width: 2040,
	height: 614,
	fps: 30,
	color: "#999999",
	opacity: 0.00,
	manifest: [
		{src:"img/CachedTexturedBitmap_1.png?1564293264922", id:"CachedTexturedBitmap_1"},
		{src:"img/CachedTexturedBitmap_2.png?1564293264922", id:"CachedTexturedBitmap_2"},
		{src:"img/disobey_logo_atlas_.png?1564293264914", id:"disobey_logo_atlas_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['3D9D021F9473CB4593AFA463F0E4DADF'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


an.makeResponsive = function(isResp, respDim, isScale, scaleType, domContainers) {		
	var lastW, lastH, lastS=1;		
	window.addEventListener('resize', resizeCanvas);		
	resizeCanvas();		
	function resizeCanvas() {			
		var w = lib.properties.width, h = lib.properties.height;			
		var iw = window.innerWidth, ih=window.innerHeight;			
		var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
		if(isResp) {                
			if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
				sRatio = lastS;                
			}				
			else if(!isScale) {					
				if(iw<w || ih<h)						
					sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==1) {					
				sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==2) {					
				sRatio = Math.max(xRatio, yRatio);				
			}			
		}			
		domContainers[0].width = w * pRatio * sRatio;			
		domContainers[0].height = h * pRatio * sRatio;			
		domContainers.forEach(function(container) {				
			container.style.width = w * sRatio + 'px';				
			container.style.height = h * sRatio + 'px';			
		});			
		stage.scaleX = pRatio*sRatio;			
		stage.scaleY = pRatio*sRatio;			
		lastW = iw; lastH = ih; lastS = sRatio;            
		stage.tickOnUpdate = false;            
		stage.update();            
		stage.tickOnUpdate = true;		
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;