from collections import deque

def solution(prices):
    answer = []
    return answer

prices = [1, 2, 3, 2, 3]

answer = []

prices = deque(prices)

while prices:
    first_price = prices.popleft()

    count = 0

    for left_price in prices:
        if first_price > left_price:
            count += 1
            break
        count += 1

    answer.append(count)

print(answer)
    