max = eval(input("Enter a value: "))              # get first value, initially the max

for i in range(0, 10, 1):                         # collect and test inputs
   cur = eval(input("Enter a value: "))
   if cur > max:                                  # check if new input beats the max...
      max = cur                                   # ...and make it the new max if it does
   print("Maximum so far: ", max)

print("Maximum found: ", max)