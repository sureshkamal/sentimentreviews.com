let app = new Vue({
    el: '#stores-landing',
    data: {

    },
    beforeMount: function() {},
    mounted: function() {},
    methods: {
        comingsoonalert: function() {
            Swal.fire(
                'Coming soon!',
                'Please check back later',
                'info'
            )
        }
    },
    filters: {}
})