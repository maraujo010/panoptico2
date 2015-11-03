angular
    .module('panApp')
    .service('dataService', dataService);

function dataService() {

    var data = {
        Map: ''
    };

    return {
        getMap: function () {
            return data.Map;
        },
        setMap: function (map) {
            data.Map = map;
        }
    };
}