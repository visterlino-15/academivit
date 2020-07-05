
    //Asigno el evento "click" del texto para provoar el copiado
    document.getElementById('copiar').addEventListener('click', copiarTexto);

    //Función que lanza el copiado del código
    function copiarTexto(ev){
        var textoACopiar = document.getElementById('copiar-text');
        var seleccion = document.createRange(); //Creo una nueva selección vacía
        seleccion.selectNodeContents(textoACopiar);    //incluyo el nodo en la selección
        //Antes de añadir el intervalo de selección a la selección actual, elimino otros que pudieran existir (sino no funciona en Edge)
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(seleccion);  //Y la añado a lo seleccionado actualmente
        try {
            var res = document.execCommand('copy'); //Intento el copiado
            if (res)
                exito();
            else
                fracaso();

            mostrarAlerta();
        }
        catch(ex) {
            excepcion();
        }
        window.getSelection().removeRange(seleccion);
    }

    //Detectar pegado (se puede hacer para toda la página interceptándolo en el documento o solo en elementos concretos, como es el caso)
    document.getElementById('ParaPegar').addEventListener('paste', interceptarPegado);

    function interceptarPegado(ev) {
        alert('Has pegado el texto:' + ev.clipboardData.getData('text/plain'));
    }
