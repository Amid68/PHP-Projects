# Save-the-Farm-PHP

## Overview
This PHP project is a text-based adventure game, part of the Learn PHP course on Codecademy. Players navigate through different locations, interact with objects, and make choices to advance in the game.

## How to Run
To start the game, navigate to the project directory in your terminal and run:

```bash
php index.php
```

## Game Features
- **Multiple Locations**: Explore various areas like the kitchen, bathroom, and woods.
- **Interactive Commands**: Use specific commands to interact with the game environment.
- **Dynamic Objectives**: Complete tasks like cooking soup, eating, or moving objects.
- **Status Tracking**: Keep track of your status including hunger, items in possession, and current location.

## Key Functions
- `changeLocation()`: Change player's location based on input.
- `cookSoup()`: Cook soup if conditions are met.
- `eatSoup()`: Eat soup to change player's hunger status.
- `gameRound()`: Represents a single turn in the game.
- `lookAround()`: Describe the current location and visible items.
- `moveCupboard()`: Move the cupboard to reveal hidden objects.
- `pee()`: Perform an action based on the player's location.
- `pickMushrooms()`: Pick mushrooms in the woods.
- `printHelp()`: Display available commands.
- `printStatus()`: Show the player's current status.
- `searchSafe()`: Search a safe for items.

## Gameplay
Players use text-based commands to interact with the game world. Each round, players can perform one action such as moving to a different location, picking up items, or interacting with objects. The game tracks the player's status including their location, items they possess, and their needs like hunger or the need to use the bathroom.

