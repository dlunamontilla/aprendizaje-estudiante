# Estructuras condicionales

Estructuras condicionales.

En JavaScript los casos pueden defirse así:

```js
let variable = 1;

switch (variable) {
    case 1:
        console.log("Primer caso");
        break;

    case 2:
        console.log("Segundo caso");
        break;
        
    case 3:
        console.log("Tercer caso");
        break;

    default:
        console.log("No tenemos ningún caso registrado");
        break;
}
```

En **PHP es exactamente igual**, pero difieren en la forma en la que se definen las variables:

```PHP
$variable = 1;

switch ($variable) {
    case 1:
        print_r("Primer caso");
        break;

    case 2:
        print_r("Segundo caso");
        break;
        
    case 3:
        print_r("Tercer caso");
        break;

    default:
        print_r("No tenemos ningún caso registrado");
        break;
}
```

## Ciclos repetitivos | Bucles **for**, **while** y **do while**

**Bucle For:**

Los bucles se utilizan para repetir las ejecuciones de código las veces que se le indiquen o para recorrer arrays u objetos.

```js

for (let i = 0; condicion; i++) {
    // Y acá se ejecuta el código las veces que sean 
    // necesarios.
}

// Recorrer un objeto
for (const property in object) {
    // Recorremos todas las propiedades de un objeto
}

// Recorremos un array:
for (const element of array) {
    // Recorremos cualquier elemento de un array
}
```

**Bucle While:**

Se ejecuta mientras una condición sea verdadera

```js
while (condicion) {
    // El código que se ejecuta mientras la condición sea verdadera.
}
```

**Do While:**

Se ejecuta mientras una condición sea verdadera, pero a diferencia de la anterior, siempre se ejecuta una vez si la condición fuese falsa.

```js {
    do {
        // Se ejecuta la una sola vez, sea verdadera o 
        // o la condición y se seguirá ejecutando si la
        // condición es verdadera.
    } while( condicion );
}
```

## Comparando con PHP

Con PHP los bucles son exactamente iguales, veamos algunos ejemplos:

**Bucle For:**

Los bucles se utilizan para repetir las ejecuciones de código las veces que se le indiquen o para recorrer arrays u objetos.

```php

for ($i = 0; $condicion; $i++) {
    // Y acá se ejecuta el código las veces que sean 
    // necesarios.
}

// Recorrer un objeto
foreach ($array as $key => $value) {
    // Recorremos todas las propiedades de un objeto
}
```

**Bucle While:**

Se ejecuta mientras una condición sea verdadera

```js
while ($condicion) {
    // El código que se ejecuta mientras la condición sea verdadera.
}
```

**Do While:**

Se ejecuta mientras una condición sea verdadera, pero a diferencia de la anterior, siempre se ejecuta una vez si la condición fuese falsa.

```js {
    do {
        // Se ejecuta la una sola vez, sea verdadera o 
        // o la condición y se seguirá ejecutando si la
        // condición es verdadera.
    } while( $condicion );
}
```

Buscar en Internet los siguientes datos:

- Bucle For
- While
- Do While

Tanto para PHP como para JavaScript.

Después de ubicar la información solicitada practicar realizando pruebas con ellos. Se explicarán en la próxima reunión virtual.

## Aplicación de los bucles

Sintaxis del bucle for:

```js
for (; condicion ;) {

}
```

Los bucles (ciclos) normalmente, se utilizan para ejecutar varias veces las mismas instrucciones, recorrer un array o un objeto.

Por ejemplo, si vamos a repetir varias veces la misma instrucción:

```js
for (let i = 0; i < 10; i++) {
    // Una instrucción a ejecutar diez veces.
}
```

Recorrer un array:

```js
const numbers = [1, 3, 5, 3, 6];

for (let i = 0; i < numbers.length; i++) {
    const number = numbers[i];
    console.log({ number });
}

```

También, para recorrer un objeto:

```js
const object = {
    name: "David E",
    lastname: "Luna M"
};

for (const property in object) {
    console.log({ property });
}
```

## Ejemplo en PHP

En PHP es similar a JavaScript, por ejemplo:

```php
for ($i = 0; $i < 10; $i++) {
    // Una instrucción a ejecutar diez veces.
}
```

Recorrer un array:

```php
$numbers = [1, 3, 5, 3, 6];

for ($i = 0; $i < count(numbers); $i++) {
    $number = $numbers[$i];
    print_r($number);
}
```

También, para recorrer un objeto:

```php
$arrayAsociativo = [
    "name" => "David E",
    "lastname" => "Luna M"
];

foreach ($arrayAsociativo as $key => $value) {
    print_r("\$key: $key | \$value: $value");
}
```