module.exports = {
    dist: {
        options: {
            // cssmin will minify later
            style: 'expanded'
        },
        files: {
            '../stylesheets/global.css': 'assets/sass/main.sass'
        },
    },
};
