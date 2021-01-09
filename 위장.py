from collections import Counter
from functools import reduce

def solution_my(clothes):
    items = {}
    for cloth in clothes:
        if cloth[1] in items:
            items[cloth[1]].append(cloth[0])
        else:
            items[cloth[1]] = [cloth[0]]
    answer = len(clothes)
    temp = 1
    if len(items) > 1:
        for item in items:
            temp *= len(items[item])
        answer += temp

    return answer


def solution(clothes):
    counter_category = Counter([cat for _, cat in clothes])
    return reduce(lambda x, y: x * (y + 1), counter_category.values(), 1) - 1

clothes = [
    ["yellow_hat", "headgear"], 
    ["blue_sunglasses", "eyewear"], 
    ["green_turban", "headgear"]
]


print(solution(clothes))
