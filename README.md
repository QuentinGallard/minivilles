# Minivilles

## How to play ?
### Setup
- Each player has :
    -  The 2 starter establishment (Wheat Field + Bakery)
    - Its monuments not bought (4 in extension 0, 7 in extension 1)

- If extension 0 : 
    - 15 stacks of cards are available to players. Each stack is made of the same establishment.
- If extension 1 : 
    - mix the cards and make 10 stacks of cards. Each stack is made of the same establishment.

- give 3 coins to each player. 
- The other coins are the bank.

- Each player send a dice, the higher start the game

### Playing the game
- Turns playing clockwise from the first player.
- A turn is when a player play.
A turn consist of : 
- The active player throw 1 or 2 dices. 
    - At the beginning of the game, the player can only throw 1 dice.
    - If the player has the _train station_, he can choose to throw 1 or 2 dices
- For every establishment in front of the players with the value on top is equal of the sum of the thrown dices : 
    - its owner receives eventually money.
    - When several establishments are activated at the same time, they are activated in this order : red > blue > green > violet (So payments are made before the revenues)
    - Transactions are perfomed counterclockwise
    - if a player can not pay all his debt, he pays what he can and is exempt from the rest. (Except if he is a Lannister who always pays his debt)
    - There is no compensation for the player who is not fully paid.
- The active player **CAN** buy a new _establishment_ from a stack or a _monument_ : 
    - he pays to the bank the value of the card
    - if the card is a monument, its effect is immediat.
    - A player may only have one VIOLET establishment of every kind.
    - A player may have the other establishment in several copies

### How to win ?
**the first player who has bought all of his monuments wins.**

## Description of the project
1. a player create a game and set the options : 
    - Extension (none, 1, 2, 3) in checkboxes
    - Optional rules ? (X stacks instead of all cards are available)
    - Number of stacks for optional Rules : (10-15)
    - nbMinPlayer : 2-4/6
    - nbMaxPlayer : 2-4/6
2. It makes a lobby where the player wait for other players. It displays : 
    - a link to join the game
    - a chat to chat with other players (it will be an additional module later)
    - a button where each players can tell he is ready 
3. When the amount of players is reach, and every player is ready, the game is launched
4. The game is initialize
    1. Every player has : 
        - 3 coins
        - a wheat field
        - a bakery
        - a set of monument (depends on the extensions chosen)
        - a City Hall (if extension Harbor is chosen)
    2. A set of cards is generated (depends on the extensions chosen), and randomized 
    3. Depends of optional rules is chosen or not : 
        - no : each cards are grouped as stack of same cards
        - yes : 
            1. cards are drawn one by one from the set of cards
            2. stacks of same cards are made until it reaches the number of available stacks    
    5. A player is chosen randomly to start the game. He is the player 1. The player on his left is 2, and so on until every player has a number.
6. The player roll a dice and start a turn :
    1. Cards are activated depending on the dice roll
    2. It activates the effect of the cards in this order red → blue → green → violet and in the order of their activation value
        1. Red cards are activated for other players
        2. Blue cards are activated for every players
        3. Green card are activated for current player
        4. Violet card are activated for current player
    3. The current player can buy a card from his available monuments or from a stack
    4. If the current player has bought every monument, he wins the game
    5. Next player ;)
7. When the game is over, charts and statistics for this game is shown :
    - a time-line of turns for each player (what he gives and what he gains) (+ - =)
    - count the stats of each dice value
    - highlights the turn when player has bought a monument or lost a monument 

## Components
(List of cards : http://machi-koro.wikia.com/wiki/List_of_cards )

### Establishment
- id
- name : string
- image : string
- description : string (for players)
- minDiceValue : int
- maxDiceValue : int
- type : int
- color: int
- cost : int
- extensionId : int (default: 0)

### Establishment Type
- id : int
- picture : string
- name : string (cereals, cow, bread, gear, factory, fruit, major, boat)

### Color
- id : int (1,2,3,4)
- name : string (red, blue, green, violet)

### Dice (not an object, it is just 1 or 2 random 1:6)
- value 

### Monument
- id : int
- name : string
- cost : int

### Player
- id : int
- game : int
- rank : int
- name : string
- establishments : arrayCollection
- monuments : arrayCollection

### Game
- id : int
- startAt : datetime
- endAt : datetime
- max_players : int (4-6)
- extension (0-1-2-3) ("Minivilles", "Marina", "Green Valley", "5-6")
- cards : array
- players : array
- winBy : int (playerId), default : null (for stats)

### Turn
- id : int
- activePlayerId : int
- nextPlayerId : int
- previousPlayers : array, precedent is 0, then 1, then 2...

## Initial support
Extension 0 + 1

## Work in Project
- Design Patterns
   - Observer : to call the compute of the gain of each card
   - Strategy : to delegate the gain algorithm of each card


