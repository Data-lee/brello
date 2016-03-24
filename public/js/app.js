"Use strict";

var LaneModel = Backbone.Model.extend({
	urlRoot:"/lanes"
}) 

var LanesCollection = Backbone.Collection.extend({
	url:"/lanes",
	Model:LaneModel
})


console.log("hello");
