#Initiative Tracker

init = {}

def add_init():
    name = input ("Please enter your character's name: ")
    new_init = int(input("Please enter your initiative: "))
    init[name] = new_init

def display_init():
    print("Initiative order: ", init)
    input("\nPress any key to continue.")

def main():
    choice = None
    print("D&D  3.5  Initiative  Tracker\n")

    while choice != "0":
        print("""
Please make your selection:
0: Exit
1: Add an initiative score.
2: Display initiative scores.
3: Sort.\n
""")
        choice = input("Please make your selection: ")

        if choice == "1":
            add_init()
        elif choice == "2":
            display_init()
        elif choice == "3":
            sorted(init, reverse = True)

main()

input("\n\nPress any key to quit.")
