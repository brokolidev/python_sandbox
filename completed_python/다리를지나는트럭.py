from collections import deque

def solution(bridge_length, weight, truck_weights):
    passing = []
    # passed = []
    time = 0
    for truck_weight in truck_weights:

        if not passing:
            passing.append(truck_weight)
        elif passing[-1] + truck_weight <= weight:
            passing.append(truck_weight)
        
        time += bridge_length

    return time


bridge_length = 100
weight = 100
truck_weights = [10]

print(solution(bridge_length, weight, truck_weights))





# 트럭을 순차적으로 진행한다

