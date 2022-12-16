def isPangram(pangram):
    alph = "abcdefghijklmnopqrstuvwxyz"
    ans = []
    flag = -1
    for i in pangram:
        for char in alph:
            if char not in i.lower():
                flag = 0
        
        if flag == 0:
            ans.append(0)
        else:
            ans.append(1)
    return ans

print(isPangram(['pack my box with five dozen liquor jugs', 'this is not a pangram']))