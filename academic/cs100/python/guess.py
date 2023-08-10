mysteryNumber = 65                                               # number to guess

isGameOver = False                                               # flag that's false while game
                                                                 # is underway and flips when done

while not isGameOver:                                            # let user guess values
   cur = eval(input("Guess a number: "))                         # get a new guess

   if cur == mysteryNumber:                                      # guess is right
      print("Congratulations, you guessed the mystery number!")
      isGameOver = True
   elif cur > mysteryNumber:                                     # guess is too big
      print("Sorry, too high! Try again...")
   else:                                                         # guess is too small
      print("Sorry, too low! Try again...")