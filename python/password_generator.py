#!/usr/bin/env python3
import random
import string
import sys

def generate_password(choice):
    length = 10
    if choice == "alpha":
        characters = string.ascii_letters
    elif choice == "alphanum":
        characters = string.ascii_letters + string.digits
    elif choice == "complex":
        characters = string.ascii_letters + string.digits + string.punctuation
    else:
        return "Type non valide"

    return ''.join(random.choices(characters, k=length))

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Type manquant")
    else:
        print(generate_password(sys.argv[1]))
