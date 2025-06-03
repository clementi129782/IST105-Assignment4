def calculate(a, b, c):
    try:
        a = float(a)
        b = float(b)
        c = float(c)
    except (ValueError, TypeError):
        return "An error occurred."

    c_cubed = c ** 3
    sqrt_c_cubed = c_cubed**(1/2)

    if c_cubed > 1000:
        result = sqrt_c_cubed * 10
    else:
        result = sqrt_c_cubed / a

    result += b

    return f"{result:.2f}"
