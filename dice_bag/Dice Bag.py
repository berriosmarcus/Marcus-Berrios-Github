#Dice Bag

from random import randint

def quit_program():
    yes_or_no = str.upper(input("\nDo you want to quit? (Y/N?) "))

    if yes_or_no == "N":
        print ("\n\n")
        main()
    elif yes_or_no == "Y":
        input("\n\nPress any key to quit.")
        quit
    else:
        print ("\nInvalid selection!\n\n")
        quit_program()

def get_input(value):
    try:

        user_input = int(input("\nPlease enter your " + value +": "))
        return user_input

    except ValueError:
            print ("\nThis program only accepts numbers!\n\n")
            get_input(value)

def get_dice():
    my_die = get_input("dice type (use numeral characters)")
    my_die_num = get_input("how many dice you are rolling")
    user_die = roll_die(my_die, my_die_num)
    print("You rolled " + '{0:g}'.format(float(user_die)) +".")
    return user_die

def roll_die(die, num_die):
    """Roll a die and return the results"""
    total = 0
    if num_die == 0:
        print("\nError! You cannot roll 0 dice!\n")
        get_dice()
        

    for x in range(num_die):

        if die == 20:
            rolled_die = randint(0, 19) +1
        elif die == 12:
            rolled_die = randint(0, 11) +1
        elif die == 10:
            rolled_die = randint(0, 9) +1
        elif die == 8:
            rolled_die = randint(0, 7) +1
        elif die == 6:
            rolled_die = randint(0, 5) +1
        elif die == 4:
            rolled_die = randint(0, 3) +1
        elif die == 3:
            rolled_die = randint(0, 2) +1
        elif die == 2:
            rolled_die = randint(0, 1) +1
        elif die == 100:
            rolled_die = randint(0, 99) +1
        else:
            print("\nError! Dice type not supported!\n")
            get_dice()

        total += rolled_die
    
    return total

def main():
    print("D I C E  B A G\n")
    get_dice()
    quit_program()

main()
