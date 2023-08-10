key = 35

position = 1
found = False

while not found:
   cur = eval(input("Enter a value: "))
   if cur == key:
      found = True
   else:
      position = position + 1

print(key, " is the ", position, "th value")