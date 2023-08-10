# Some sample lists 
data = [22, 45, 5, -1, 33, 65, 35, 29, -40]
#data = [-40, 25, -60, 71, 68, 100, 25]

# Initially assume max is at first position
max = data[0]

# Note that this implementation of the loop redundantly compares the first value to itself
for val in data:                                  # test data points
   if val > max:                                  # check if current point beats the max...
      max = val                                   # ...and make it the new max if it does
   print("Maximum so far: ", data[maxIndex])

print("Maximum found: ", data[maxIndex])