# Explicación de cada de la clase

[Tutorial completo de JavaScript][1]

[1]:https://es.javascript.info/ "Tutorial completo de JavaScript"

`window` es un objeto global de JavaScript. Prácticamente, en él se encuentra todos los objetos y funciones que necesitamos para construir una aplicación del lado del navegador.

`global` es exactamente lo mismo que el caso anterior, pero con **NodeJS.**

## Tipo de datos

Variable de tipo `string`:

```js
/** @type { string } */
let unaCadena;
```

Variable de tipo numérica:

```js
/**  @type { number } */
let unNumero;
```

Si se quiere definir la variable como un array, se debe escribir `/** @type { Array<tipo> } */`, por ejemplo:

**Un array de número:**

```js
/** @type { Array<number> } */
let array = [];
```

Un array de caracteres:

```js
/** @type { Array<string> } */
let array = [];
```

Si desea crear un objeto lo puede hacer escribiendo la siguiente línea:

```js
const objeto = {};
```

O también de esta otra forma:

```js
const objeto = new Object();
```

Pero, para definirlo como tipo objeto debemos agregar el comentario `/** @type { Object<tipo, tipo> } */`, es decir:

**Objeto con propiedades tipo `string` o de cadena:

```js
/** @type { Object<string, string> } */
const objeto = {};
```

A través de su comentario, hemos definido un objeto que debe tener una propiedad de tipo `string` con su valor de tipo `string` también.

**Objeto con propiedades numéricas con valores numéricos:**

```js
/** @type { Object<string, number> } */
const objeto = {};
```

**Objeto con propieades y valores tipo `string`o numérica:**

```js
/** @type { Object<string|number, string|number> } */
const objeto = {};
```

**Variables tipo booleano:** son variables cuyos únicos valores posibles son `true` y `false`, por ejemplo:

```js
let variable = false;
```

Y con el valur `true`:

```js
let variable = true;
```

Si se quiere "tipar" la variable como _booleano_ sin inicializarla, puede escribir las siguientes líneas:

```js
/** @type { boolean } */
let variable;
```
