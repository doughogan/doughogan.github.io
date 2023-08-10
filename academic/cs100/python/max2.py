# Some sample lists 
data = [22, 45, 5, -1, 33, 65, 35, 29, -40]
#data = [-40, 25, -60, 71, 68, 100, 25]

# Initially assume max is at first position and start a counter
maxIndex = 0
i = 0

# Note that this implementation of the loop redundantly compares the first value to itself
for val in data:                                  # test data points
   if val > data[maxIndex]:                       # check if current point beats the max...
      maxIndex = i                                # ...and make it the new max if it does
   i = i + 1
   print("Maximum so far: ", max)

print("Maximum found: ", max)