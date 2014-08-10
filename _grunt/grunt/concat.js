module.exports = {
    js: {
        src: [
            'assets/js/lib/*.js',
            'assets/js/vendor/*.js',
            'assets/js/main.js'
        ],
        dest: '../javascripts/main.js'
    },
    mixins: {
        src: [
            'assets/sass/parts/_mixins/*.{sass,scss}'
        ],
        dest: 'assets/sass/parts/_mixins.scss'
    }
};
