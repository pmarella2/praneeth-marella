# Fox and Hounds: A Board Game

## **Description:**
This project was created to understand and implement Web Application Security in a multiplayer/user application. Fox and Hounds is played on an 8×8 chess/checkerboard and only the dark squares are used (in our case the grass aka green squares). The four hounds are initially placed on the dark squares at one end of the board; the fox is placed on any dark square on the opposite end. The objective of the fox is to cross from one side of the board to the other, arriving at any one of the hounds' original squares. The hounds' objective is to prevent the fox from doing so by trapping it.

## **Game Rules:**
The hounds can only move diagonally forward one square. The fox can move diagonally forward or backward one square. There is no jumping/eliminating/promoting of pieces in this game. The game starts with the fox moving first. The player controlling the hounds may move only one of them each turn. The fox is trapped when it can no longer move to a vacant square. It is possible for two hounds to trap the fox against an edge of the board (other than their original home-row) or even one corner where a single hound may do the trapping. Should a hound reach the fox's original home row it will be unable to move further.
