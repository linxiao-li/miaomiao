define(['jquery',
    'underscore',
    'backbone'
], function($, _, Backbone) {
    var SessionModel = Backbone.Model.extend({
        url: "../User/user",
        idAttribute: "Id"
    })

    //usually returning the object you created...
    return new SessionModel()
});