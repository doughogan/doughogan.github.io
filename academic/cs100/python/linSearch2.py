# Some sample lists and a sample key
data = [22, 45, 5, -1, 33, 65, 35, 29, -40]
#data = [22, 45, 5, -1, 33, -40]
key = 35

# Start looking from first element in the list, initially assuming key isn't found
position = 0
found = False

# Look for key until it's found or we run out of data
while not found and position < len(data):
   cur = data[position]
   print("Comparing ", cur, " to ", key, "...")
   if cur == key:                                        # found key -> remember we're done
      found = True
      print("...found!")
   else:                                                 # didn't find key -> keep looking
      position = position + 1
      print("...not found")

# Completing the loops means we found the key or we ran out of data...
if found:                                               # found key
   print(key, " is in position ", position, "in data")
else:                                                   # ran out of data
   print(key, " is not in data")