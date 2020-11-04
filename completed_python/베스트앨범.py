from collections import defaultdict
from operator import itemgetter

def solution(genres, plays):
    count_list = defaultdict(int)
    total_list = defaultdict(list)

    for song_id, genre, play in zip(counter(), genres, plays):
        count_list[genre] += play
        total_list[genre].append((-play, song_id))

    genres_in_order = sorted(count_list.keys(), key=lambda g:count_list[g], reverse=True)
    print(count_list.keys())

    best_songs = []

    for genre in genres_in_order:
        sorted_list = sorted(total_list[genre])
        temp = []
        for _, song_id in sorted_list:
            temp.append(song_id)
        best_songs.extend(temp[:2])

    return best_songs


def solution2(genres, plays):
    play_count_by_genre = defaultdict(int)
    songs_in_genre = defaultdict(list)

    for song_id, genre, play in zip(counter(), genres, plays):
        play_count_by_genre[genre] += play
        songs_in_genre[genre].append((-play, song_id))

    # print(songs_in_genre)

    genre_in_order = sorted(play_count_by_genre.keys(), key=lambda g:play_count_by_genre[g], reverse=True)

    answer = []

    for genre in genre_in_order:
        answer.extend([ song_id for minus_play, song_id in sorted(songs_in_genre[genre])][:2])

    return answer


# def solution3(generes, plays):
#     total = []
#     for song_id, genre, play in zip(counter(), genres, plays):
#         total.append([song_id, genre, play])
#     print(sorted(total, key=itemgetter()))


def counter():
     i = 0
     while True:
         yield i
         i += 1


genres = ["classic", "pop", "classic", "classic", "pop"]
plays = [500, 600, 150, 800, 2500]
    
# print(counter())
# print(solution(genres, plays))
print(solution2(genres, plays))
# solution3(genres, plays)
