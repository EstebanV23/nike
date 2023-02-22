categorias = document.getElementById("categorias");
estilos = document.getElementById("estilos");
genero = document.getElementById("genero");
talla = document.getElementById("talla");

categorias.addEventListener('click', function(){

    switch (genero.value)
    {
        case "hombre":
            switch(categorias.value)
            {
                case "calzado":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='deportivos'> Deportivos </option><option value='life'> LifeStyle </option><option value='sunning'> Sunning </option><option value='jordan'> Jordan </option><option value='sandalias'> Sandalias </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='34'> 34 </option><option value='35'> 35 </option><option value='36'> 36 </option><option value='37'> 37 </option><option value='38'> 38 </option><option value='39'> 39 </option><option value='40'> 40 </option><option value='41'> 41 </option><option value='42'> 42 </option>";
                    break;
                case "ropa":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='playeras'> Playeras </option><option value='shorts'> Shorts </option><option value='polos'> Polos </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                    break;
                case "conjuntos":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='futbol'> Fútbol </option><option value='basquetbol'> Basquetbol </option><option value='gym'> Gym </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                    break;
                case "accesorios":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros </option><option value='gorras'> Gorras </option><option value='apple'> Apple watch nike </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                    break;
                default:
                    estilos.innerHTML = "<option selected value=''> Estilos </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option>";
            }
            break;
            case "mujer":
                switch(categorias.value)
                {
                    case "calzado":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='life'> LifeStyle </option><option value='running'> Running </option><option value='softball'> Softball </option><option value='tenis'> Tenis </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='34'> 34 </option><option value='35'> 35 </option><option value='36'> 36 </option><option value='37'> 37 </option><option value='38'> 38 </option><option value='39'> 39 </option><option value='40'> 40 </option>";
                        break;
                    case "ropa":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='pants'> Pants </option><option value='leggins'> Leggins </option><option value='shorts'> Shorts </option><option value='nikep'> Nike Pro </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                        break;
                    case "conjuntos":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='running'> Running </option><option value='nikes'> Nike Sportswear </option><option value='voleibol'> Vóleibol </option><option value='basquetbol'> Básquetbol </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                        break;
                    case "accesorios":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros - Vandas </option><option value='apple'> Apple watch nike </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                        break;
                    default:
                        estilos.innerHTML = "<option selected value=''> Estilos </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option>";
                }
                break;
            case "niño":
                switch(categorias.value)
                {
                    case "calzado":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='preescolar'> Preescolar </option><option value='basquetbol'> Básquetbol </option><option value='nikef'> Nike Flyease </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='24'> 24 </option><option value='25'> 25 </option><option value='26'> 26 </option><option value='27'> 27 </option><option value='28'> 28 </option><option value='29'> 29 </option><option value='30'> 30 </option><option value='31'> 31 </option> <option value='32'> 32 </option><option value='33'> 33 </option>";
                        break;
                    case "ropa":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='preescolar'> Preescolar </option><option value='nikep'> Nike Pro </option><option value='sudaderas'> Sudaderas </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "conjuntos":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='combinados'> Combinados </option><option value='tallas'> Tallas Amplias </option><option value='chamarras'> Chamarras </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "accesorios":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros </option><option value='calcetines'> Calcetines </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                        break;
                    default:
                        estilos.innerHTML = "<option selected value=''> Estilos </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option>";
                }
                break;
            case "niña":
                switch(categorias.value)
                {
                    case "calzado":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='futbol'> Fútbol </option><option value='sandalias'> Sandalias </option><option value='nikef'> Nike Flyease </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='24'> 24 </option><option value='25'> 25 </option><option value='26'> 26 </option><option value='27'> 27 </option><option value='28'> 28 </option><option value='29'> 29 </option><option value='30'> 30 </option><option value='31'> 31 </option> <option value='32'> 32 </option><option value='33'> 33 </option>";
                        break;
                    case "ropa":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='preescolar'> Preescolar </option><option value='bras'> Bras Deportivo </option><option value='faldas'> Faldas </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "conjuntos":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='combinados'> Combinados </option><option value='tallas'> Tallas Amplias </option><option value='chamarras'> Chamarras </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "accesorios":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros </option><option value='calcetines'> Calcetines </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                        break;
                    default:
                        estilos.innerHTML = "<option selected value=''> Estilos </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option>";
                }
                break;
            default:
            estilos.innerHTML = "<option selected value=''> Estilos </option>";
            talla.innerHTML = "<option selected value=''> Talla </option>";
    }

})

genero.addEventListener('click', function(){

    switch (genero.value)
    {
        case "hombre":
            switch(categorias.value)
            {
                case "calzado":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='deportivos'> Deportivos </option><option value='life'> LifeStyle </option><option value='sunning'> Sunning </option><option value='jordan'> Jordan </option><option value='sandalias'> Sandalias </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='34'> 34 </option><option value='35'> 35 </option><option value='36'> 36 </option><option value='37'> 37 </option><option value='38'> 38 </option><option value='39'> 39 </option><option value='40'> 40 </option><option value='41'> 41 </option><option value='42'> 42 </option>";
                    break;
                case "ropa":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='playeras'> Playeras </option><option value='shorts'> Shorts </option><option value='polos'> Polos </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                    break;
                case "conjuntos":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='futbol'> Fútbol </option><option value='basquetbol'> Basquetbol </option><option value='gym'> Gym </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                    break;
                case "accesorios":
                    estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros </option><option value='gorras'> Gorras </option><option value='apple'> Apple watch nike </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                    break;
                default:
                    estilos.innerHTML = "<option selected value=''> Estilos </option>";
                    talla.innerHTML = "<option selected value=''> Talla </option>";
            }
            break;
            case "mujer":
                switch(categorias.value)
                {
                    case "calzado":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='life'> LifeStyle </option><option value='running'> Running </option><option value='softball'> Softball </option><option value='tenis'> Tenis </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='34'> 34 </option><option value='35'> 35 </option><option value='36'> 36 </option><option value='37'> 37 </option><option value='38'> 38 </option><option value='39'> 39 </option><option value='40'> 40 </option>";
                        break;
                    case "ropa":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='pants'> Pants </option><option value='leggins'> Leggins </option><option value='shorts'> Shorts </option><option value='nikep'> Nike Pro </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                        break;
                    case "conjuntos":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='running'> Running </option><option value='nikes'> Nike Sportswear </option><option value='voleibol'> Vóleibol </option><option value='basquetbol'> Básquetbol </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='s'> S </option><option value='m'> M </option><option value='l'> L </option><option value='xl'> XL </option><option value='xxl'> XXL </option>";
                        break;
                    case "accesorios":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros - Vandas </option><option value='apple'> Apple watch nike </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                        break;
                    default:
                        estilos.innerHTML = "<option selected value=''> Estilos </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option>";
                }
                break;
            case "niño":
                switch(categorias.value)
                {
                    case "calzado":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='preescolar'> Preescolar </option><option value='basquetbol'> Básquetbol </option><option value='nikef'> Nike Flyease </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='24'> 24 </option><option value='25'> 25 </option><option value='26'> 26 </option><option value='27'> 27 </option><option value='28'> 28 </option><option value='29'> 29 </option><option value='30'> 30 </option><option value='31'> 31 </option> <option value='32'> 32 </option><option value='33'> 33 </option>";
                        break;
                    case "ropa":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='preescolar'> Preescolar </option><option value='nikep'> Nike Pro </option><option value='sudaderas'> Sudaderas </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "conjuntos":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='combinados'> Combinados </option><option value='tallas'> Tallas Amplias </option><option value='chamarras'> Chamarras </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "accesorios":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros </option><option value='calcetines'> Calcetines </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                        break;
                    default:
                        estilos.innerHTML = "<option selected value=''> Estilos </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option>";
                }
                break;
            case "niña":
                switch(categorias.value)
                {
                    case "calzado":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='futbol'> Fútbol </option><option value='sandalias'> Sandalias </option><option value='nikef'> Nike Flyease </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='24'> 24 </option><option value='25'> 25 </option><option value='26'> 26 </option><option value='27'> 27 </option><option value='28'> 28 </option><option value='29'> 29 </option><option value='30'> 30 </option><option value='31'> 31 </option> <option value='32'> 32 </option><option value='33'> 33 </option>";
                        break;
                    case "ropa":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='preescolar'> Preescolar </option><option value='bras'> Bras Deportivo </option><option value='faldas'> Faldas </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "conjuntos":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='combinados'> Combinados </option><option value='tallas'> Tallas Amplias </option><option value='chamarras'> Chamarras </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='6'> 6 </option><option value='8'> 8 </option><option value='10'> 10 </option><option value='12'> 12 </option><option value='14'> 14 </option><option value='16'> 16 </option>";
                        break;
                    case "accesorios":
                        estilos.innerHTML = "<option selected value=''> Estilos </option><option value='mochilas'> Mochilas </option><option value='gorros'> Gorros </option><option value='calcetines'> Calcetines </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option><option value='ninguna'> Ninguna </option>";
                        break;
                    default:
                        estilos.innerHTML = "<option selected value=''> Estilos </option>";
                        talla.innerHTML = "<option selected value=''> Talla </option>";
                }
                break;
            default:
            estilos.innerHTML = "<option selected value=''> Estilos </option>";
            talla.innerHTML = "<option selected value=''> Talla </option>";
    }

})