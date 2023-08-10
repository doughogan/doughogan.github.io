# Some sample lists 
data = [22, 45, 5, -1, 33, 65, 35, 29, -40]
#data = [-40, 25, -60, 71, 68, 100, 25]

# Initially assume max is at first position
maxIndex = 0

for i in range(1, len(data), 1):                  # test data points
   if data[i] > data[maxIndex]:                   # check if current point beats the max...
      maxIndex = i                                # ...and make it the new max if it does
   print("Maximum so far: ", data[maxIndex])

print("Maximum found: ", data[maxIndex])