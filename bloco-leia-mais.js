(function(blocks, element){
    var el = element.createElement;

    var blockStyle = {
        backgroundColor: 'green',
        color: 'white',
        padding: '2em',
        border: '3px solid black'
    };

    var blockStyleFront = {
        backgroundColor: 'blue',
        color: 'white',
        padding: '2em',
        border: '3px solid black'
    };

    blocks.registerBlockType('sallazar/leia-mais', {
        title: 'Leia mais VP',
        icon: 'dashicons-list-view',
        category: 'layout',

        edit: function(){
            return el(
                'p',
                {style: blockStyle},
                'Este conteúdo será exibido no editor.'
            );
        },

        save: function(){
            return el(
                'p',
                {style: blockStyleFront},
                'Este conteúdo será exibido para o usuário final.'
            );
        },
    });
    
}(
    window.wp.blocks,
    window.wp.element
));