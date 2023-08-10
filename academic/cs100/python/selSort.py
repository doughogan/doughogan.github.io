# Some sample lists 
data = [22, 45, 5, -1, 33, 65, 35, 29, -40]
#data = [-40, 25, -60, 71, 68, 100, 25]

# Selection sort
for bottom in range(len(data)-1, 0, -1):             # move bottom up through array
   maxIndex = 0                                      # initially assume max is at first position

   for i in range(0, bottom + 1, 1):                 # look for max up to current bottom
      if data[i] > data[maxIndex]:                   # check if current point beats the max...
         maxIndex = i                                # ...and make it the new max if it does
   
   print("Maximum this pass: ", data[maxIndex], "(positions 0 through ", bottom, ")")

   temp = data[maxIndex]                             # swap max value and bottom value
   data[maxIndex] = data[bottom]
   data[bottom] = temp


# Walk sorted list
print("\nSorted list: ")
for val in data:                  
   print(val)
