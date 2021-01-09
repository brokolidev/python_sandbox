import math

progresses = [93, 30, 55]

speeds = [1, 30, 5]

def solution(progresses, speeds):
    complete = []

    for progress, speed in zip(progresses, speeds):

        # 배포에 소요되는 날짜를 구한다
        left = 100 - progress
        will_spend = math.ceil(left / speed)

        if not complete or complete[-1][0] < will_spend:
            complete.append([will_spend, 1])
        else:
            complete[-1][1] += 1

    return [x[1] for x in complete]