def solution1(phone_book):
    phone_book.sort()
    for p1, p2 in zip(phone_book, phone_book[1:]):
        if p2.startswith(p1):
            return False
    return True

def solution(phone_book):
    hash_map = {}
    for phone_number in phone_book:
        hash_map[phone_number] = 1
    print(hash_map)
    for phone_number in phone_book:
        temp = ""
        for number in phone_number:
            temp += number
            print(temp)
            if temp in hash_map and temp != phone_number:
                return False
    return True

phone_book = ["119", "97674223", "1195524421"]

solution(phone_book)