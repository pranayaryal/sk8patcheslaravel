new Vue ({
   el: 'body',

    data: {
        a:2,

        checkedPatches : []
    },

    methods: {

        incrementCart: function () {

            this.a ++;
        },

        decrementCart: function () {
            this.a = this.a - 1;
        }
    }

});
//# sourceMappingURL=vuecodes.js.map
