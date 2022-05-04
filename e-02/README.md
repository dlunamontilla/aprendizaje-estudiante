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