module.exports = {
    options: {
        browsers: ['last 10 version']
    },
    multiple_files: {
        expand: true,
        flatten: true,
        src: '../stylesheets/global.css',
        dest: '../stylesheets/'
    },
};
