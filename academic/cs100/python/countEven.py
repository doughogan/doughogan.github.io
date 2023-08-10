evenCount = 0                                   # initially, no evens

for i in range(0, 5, 1):                        # collect and test inputs
   cur = eval(input("Enter a value: "))
   if cur%2 == 0:                               # encountered an even value...
      evenCount = evenCount + 1                 # ...so tally it

print("Number of even inputs: ", evenCount)