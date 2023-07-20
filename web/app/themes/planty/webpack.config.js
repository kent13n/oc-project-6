const path = require('path');

module.exports = {
    entry: {
        'testimonial': './blocks/testimonial/index.jsx',
        'tastes': './blocks/tastes/index.jsx',
        'section': './blocks/section/index.jsx',
        'product-highlight': './blocks/product-highlight/index.jsx',
        'team': './blocks/team/index.jsx',
    },
    output: {
        path: path.resolve(__dirname, 'blocks/dist'),
        filename: '[name].js'
    },
    module: {
        rules: [
            {
                test: /.jsx?$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            }
        ]
    },
    watchOptions: {
        poll: 1000 // Mandatory for WSL
    }
}