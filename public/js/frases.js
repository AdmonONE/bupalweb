
// Completamos el vector con frases ,el número de casillas es indiferente
 var Quotation=new Array()
	Quotation[0] = "''Si trabajas apasionadamente y realmente convencido de lo que estás haciendo, habrás encontrado la clave del éxito — Anónimo''";
	Quotation[1] = "''Siempre que te pregunten si puedes hacer un trabajo, contesta que sí y ponte enseguida a aprender cómo se hace — Franklin D. Roosevelt''"; 
	Quotation[2] = "''La confianza en sí mismo es el primer secreto del éxito — Ralph Waldo Emerson''"; 
	Quotation[3] = "''El triunfo no está en vencer siempre, sino en nunca desanimarse — Napoleón Bonaparte''"; 
	Quotation[4] = "''Un hombre inteligente no es el que tiene muchas ideas, sino el que sabe sacar provecho de las pocas que tiene — Anónimo''"; 
	Quotation[5] = "''El éxito no se logra sólo con cualidades especiales. Es sobre todo un trabajo de constancia, de método y de organización — Víctor Hugo''";
	Quotation[6] = "''El trabajo que nunca se empieza es el que tarda más en finalizarse — J.R.R. Tolkien''";
	Quotation[7] = "''Escoge un trabajo que te guste, y nunca tendrás que trabajar ni un solo día de tu vida — Confucio'";
	Quotation[8] = "''El éxito en la vida consiste en siempre seguir adelante — Anónimo'";
	Quotation[9] = "''El 80% del éxito se basa simplemente en insistir — Woody Allen'";
	Quotation[10] = "''La motivación nos impulsa a comenzar y el hábito nos permite continuar — Jim Ryun'";
	Quotation[11] = "''Si puedes soñarlo, puedes hacerlo — Walt Disney'";
	Quotation[12] = "''Un líder es alguien que conoce el camino, anda el camino, y muestra el camino — John C. Maxwell'";
	Quotation[13] = "''Pensando en nuestra familia y en nuestros amigos, encontraremos la motivación necesaria para empezar un nuevo día de trabajo — Anónimo'";
	Quotation[14] = "''El éxito no es la clave de la felicidad. La felicidad es la clave del éxito — Albert Schweitzer'";
	Quotation[15] = "''Cuanto más tiempo pase sin que actúes, más dinero estás dejando de ganar — Carrie Wilkerson'";
	Quotation[16] = "''Mantente alejado de aquellas personas que tratan de menospreciar tus ambiciones. Las personas pequeñas siempre lo hacen, pero los verdaderamente grandes hacen sentirte que tú también puedes ser grande — Mark Twain'";
	Quotation[17] = "''Definitivamente quería ganar mi libertad. Pero la principal motivación no fue hacer dinero, sino causar un impacto — Sean Parker'";
	Quotation[18] = "''No tengo miedo a morir, tengo miedo a no intentarlo — Jay Z'";
	Quotation[19] = "''A menudo las personas están trabajando duro en la cosa equivocada. Trabajar en la cosa correcta probablemente es más importante que trabajar duro — Caterina Fake'";
	Quotation[20] = "''El éxito es la suma de pequeños esfuerzos repetidos un día sí y otro también — Robert Collier'";
	Quotation[21] = "''Nada es particularmente difícil si lo divides en pequeños trabajos — Henry Ford'";
	Quotation[22] = "''He aprendido que los errores pueden ser tan buenos profesores como el éxito — Jack Welch'";
	Quotation[23] = "''Normalmente, lo que nos da más miedo hacer es lo que más necesitamos hacer — Timothy Ferriss'";
	Quotation[24] = "''Si crees que puedes, ya estás a medio camino — Theodore Roosevelt'";
	Quotation[25] = "''Trabajar es lo que nos mantiene vivos, sin nuestro trabajo, no seríamos más que seres sin metas en la vida — Anónimo'";
	Quotation[26] = "''Pregúntate si lo que estás haciendo hoy te acerca al lugar en el que quieres estar mañana - Walt Disney'";
	Quotation[27] = "''Cuando sientas que todo se pone en tu contra, recuerda que un avión despega contra el viento, no a favor - Henry Ford'";
	Quotation[28] = "''Comienza haciendo lo que es necesario, después lo que es posible y de repente estarás haciendo lo imposible - San Francisco de Asís'";
	Quotation[29] = "''La función del liderazgo es producir más líderes, no más seguidores - Ralph Nader'";
	Quotation[30] = "''Dedica tanto tiempo a tu propia mejora personal que no te quede tiempo para criticar a los demás - Christian D. Larson'";
	Quotation[31] = "''Nunca vas a poder cruzar el océano hasta que tengas el coraje de dejar de ver la costa - Cristóbal Colón'";
	Quotation[32] = "''Si quieres llegar rápido, camina solo. Si quieres llegar lejos, camina en grupo - Proverbio africano'";
	Quotation[33] = "''Si no actúas como piensas, vas a terminar pensando como actúas - Blaise Pascal'";
	Quotation[34] = "''La forma de empezar algo es dejar de hablar y empezar a hacerlo - Walt Disney'";
	Quotation[35] = "''Yo no soy tan inteligente, simplemente trabajo en los problemas más tiempo - Albert Einstein'";




// Calculamos la longitud el vector (número de frases del stock)
 var Q = Quotation.length; 

// Obtener un número aleatorio entre 1 y la cantidad de frases incluidas 
 //Utilizando la clase Math y el método random(). 
 var whichQuotation=Math.round(Math.random()*(Q-1)); 

// Creamos una función para mostrar la frase 
 function showQuotation() { 
 document.write(Quotation[whichQuotation]);} 
 