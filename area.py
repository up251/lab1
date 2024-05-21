import sys
import math

def calculate_area(radius):
    return math.pi * (radius ** 2)

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Error: One number (radius) is required.")
        sys.exit(1)

    try:
        radius = float(sys.argv[1])
    except ValueError:
        print("Error: Please enter a valid number.")
        sys.exit(1)

    result = calculate_area(radius)
    print(f"The area of a circle with radius {radius} is {result}.")
