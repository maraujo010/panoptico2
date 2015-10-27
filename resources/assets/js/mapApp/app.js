angular
    .module('mapManipulation', []);

angular
	.module('searchArea', []);

angular
	.module('toolboxMenu', []);

angular
	.module('devicePanel', []);

angular
    .module('mapApp', ['mapManipulation', 'searchArea', 'toolboxMenu', 'devicePanel']);