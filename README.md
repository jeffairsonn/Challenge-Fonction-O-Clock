# Challenge fonctions

:warning: Cet énoncé est très guidé, très précis. Il se peut que tu passes naturellement certaines étapes (par exemple 2 et 3)

## Étape 1 - Convertir un montant en dollar

Dans `index.php` on va écrire un programme permettant de convertir un montant en dollar.

- Déclarer une variable `$amount` pour y mémoriser la valeur `42`. Elle représente notre point de départ en euro.
- Écrire une succession d'instructions permettant de convertir `$amount` en dollar. On devra multiplier le montant en euro par un taux de conversion pour l'obtenir en dollar. 
- On considère le taux de conversion suivant : `1 EUR = 1.14 USD`  
- Mémoriser le nombre obtenu dans une variable `$amountInDollar`

## Étape 2 - Créer une fonction

On va isoler notre programme dans un sous-programme, c'est-à-dire une fonction. Le rendant ainsi réutilisable.

- Déclarer une fonction `getAmountInDollar`
- Y placer toutes les instructions écrites à l'étape 1
- À la fin de la fonction **retourner** le montant en dollar. 

## Étape 3 - Exécuter la fonction

Dans notre programme principal, c'est-à-dire en dehors de la fonction, on va pouvoir exécuter le sous-programme (la fonction) qui a la responsabilité de calculer la conversion. La fonction nous retournera une valeur, le nombre représentant le montant en dollar, on pourra s'en servir, par exemple l'afficher.

- Exécuter la fonction `getAmountInDollar` et mémoriser sa valeur de retour dans une variable `$dollar`
- Une fois la fonction exécutée, vérifier que rien ne s'affiche à l'écran (valeur retournée, et non affichée)
- Après l'éxecution de la fonction, afficher le montant en dollar récupéré.
- On doit voir 42 converti en dollar soit `47.88` si on a bien respecté le taux de conversion

## Étape 4 - Ajouter un paramètre

Notre sous-programme est limité car il ne sait faire que la conversion de `42`. On va le rendre **paramétrable**. L'idée c'est que notre fonction puisse déterminer la conversion de n'importe quel nombre. C'est à l'exécution qu'on donnera la valeur à tester.

- Plutôt que d'assigner `$amount` dans la fonction, préparer un paramètre `$amount` dans la fonction
- Modifier l'exécution pour transmettre la valeur `123`
- Si tout se passe bien, on doit voir le résultat de la conversion de 123 soit `140.22`
- On peut faire une nouvelle exécution et un nouvel echo, par exemple avec la valeur `10`, on doit obtenir `11.4`

## Étape 5 - Récupérer un paramètre GET

On garde tout le code déjà en place. On va maintenant récupérer un nouveau montant transmis au script via un paramètre en GET dans l'url.

- Dans le navigateur, appeler `index.php` avec un _paramètre GET_ nommé `number` valant `456`. Cela doit donner quelque chose comme `http://localhost/chemin/vers/index.php?number=456`
- Dans `index.php` récupérer la valeur du _paramètre GET_ `number` et la mémoriser dans une variable nommée `$numberToConvert`

## Étape 6 - Réexécuter la fonction

On va réexécuter la fonction pour afficher le nombre transmis en _paramètre GET_ converti en dollar

- Exécuter à nouveau la fonction `getAmountInDollar` en lui transmettant la valeur de `$numberToConvert`
- En fonction de la valeur de retour reçue à l'exécution de la fonction, afficher le montant converti
- On peut tester avec différentes valeurs transmises en _paramètre GET_ pour voir si le montant affiché est correct à chaque fois

## Étape 7 - Conversion en yen

On refait la même ? Reprendre les étape 1 à 6 mais cette fois-ci on veut une fonction pour convertir le montant en yen

- On doit créer une fonction `getAmountInYen` qui prend en paramètre le nombre à convertir et retourner le montant en yen
- On doit exécuter ensuite la fonction et récupérer le montant en yen, puis l'afficher
- On considère le taux de conversion suivant : `1 EUR = 126 YEN`

## Bonus - Plus de fonctions, plus d'algo

Comme toujours les bonus ne sont que des bonus :wink:

<details><summary>Tu en veux encore ?</summary>

### Conversion générique
On reprend toujours les mêmes étapes. Cette fois-ci on ajoute une fonction de conversion plus générique

- On crée une fonction `getConvertedAmount`
- La fonction prend 2 paramètres : 
  - le montant à convertir
  - le nom de la devise souhaitée
- On considérera les taux de conversion suivants :
  - `1 EUR = 1.14 USD`
  - `1 EUR = 126 JPY`
  - `1 EUR = 33.18 ARS`
- La valeur de retour sera le montant converti dans la devise souhaitée
- Exécuter la fonction plusieurs fois en demandant des devises différentes 

### Est pair
On reprend encore les mêmes étapes, cette fois-ci pour créer une fonction `isEven`.

- La fonction `isEven` prend en paramètre le nombre à vérifier, on pourra l'appeler `$number`
- Elle contient une succession d'instructions permettant de déterminer si `$number` est pair. On représentera le fait que `$number` soit pair ou non par un booléen.  
  Pour déterminer si un nombre est pair, on peut explorer l'une de ces deux pistes :
  - sa division par 2 donne un nombre entier (sans virgule)
  - le reste de sa division par 2 est 0
- La fonction retourne `true` ou `false` si le nombre est pair ou non
- Exécuter la fonction, si la valeur obtenue en retour est vraie, afficher `Le nombre est pair`, sinon `le nombre est impair`
- Bonus dans le bonus : faire une deuxième fonction `isOdd` qui retourne `true` si le nombre est impair, false `sinon`

## Méga bonus - Encore plus de fonctions et plus d'algo

### Plus petit chiffre

On recommence à nouveau, cette fois ci avec une fonction pour déterminer le plus petit chiffre faisant partie du nombre

- nom de la fonction : getPlusPetitChiffre()
  - prend le nombre à analyser en paramètre
  - retourne le plus petit chiffre de ce nombre
- les nombres sont tous composés de chiffres
- les chiffres sont 0, 1, 2, 3, 4, 5, 6, 7, 8 et 9
- le nombre 42 est composé de deux chiffres 4 et 2
- le plus petit chiffre de 42 est 2
- la fonction `str_split`, fournie par PHP, permet de convertir une string en tableau de string

### Conversion en binaire

On recommence encore, on va convertir le nombre en binaire

- pour tester, voici une liste de nombres et de leur représentation binaire :
  - 0 : 0
  - 1 : 1
  - 2 : 10
  - 3 : 11
  - 4 : 100
  - 5 : 101
  - 59 : 111011
  - 89 : 1011001
  - 97 : 1100001

l'écriture de cette fonction peut être très très simple, comme très très compliquée... :smiling_imp:

### Est premier

On recommence un dernière fois ? Cet exercice bonus est assez intéressant car plus compliqué au niveau algorithme.  
Cependant, il faut avoir de bonnes bases en Maths pour le comprendre donc, **ce n'est qu'un bonus** :wink:
- nom de la fonction : isPrime()
- prend le nombre à tester en paramètre
- retourne vrai si premier, faux sinon
- un nombre premier est un nombre divisible uniquement par lui-même et 1
- un nombre premier est obligatoirement impair (sauf 2)
- 1 n'est pas un nombre premier
- pour tester voici une liste de nombres premiers : 2, 3, 5, 59, 89, 97, 193

</details>
