(function() {
    tinymce.PluginManager.add('arrowList', function (editor, url){
        // Отображение копки в редакторе
        editor.addButton('arrowList', {
            text: "",
            title: "Список с тругольником",
            image : url+'/images/ul-arrow.png',
            cmd: 'arrowList',
            tooltip: 'Список с тругольником',
        });
        editor.addCommand('arrowList', function () {
            let arrow_ul = `<ul class="ul--arr"><li></li></ul>`
            // Выполняем замену выделенного текста
            editor.execCommand('mceReplaceContent', true, arrow_ul);
            return;
        })
    });
})();