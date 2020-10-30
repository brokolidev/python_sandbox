def solution(N, stages):
    rates = {}
    for stage in range(1, N + 1):
        reached_players = len(list(filter(lambda playing_stage: playing_stage >= stage, stages)))
        uncleared_players = len(list(filter(lambda playing_stage: playing_stage == stage, stages)))
        failure_rate = uncleared_players / reached_players
        rates[stage] = failure_rate

    def f2(x):
        return x[1]

    sorted_rates = sorted(rates.items(), key=(lambda x: x[1]), reverse=True)

    return list(map(lambda x: x[0], sorted_rates))

N = 5
stages = [2, 1, 2, 6, 2, 4, 3, 3]



# print(list(filter(lambda x: x[0], sorted_rates)))
# print(sorted_rates[0][0])