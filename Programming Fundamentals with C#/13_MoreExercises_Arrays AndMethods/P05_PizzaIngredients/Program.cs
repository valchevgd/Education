using System;

namespace P05_PizzaIngredients
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine()
                .Split();

            int alphasLenght = int.Parse(Console.ReadLine());

            
            int countOfIngredients = 0;

            for (int i = 0; i < input.Length; i++)
            {
                char[] tempArr = input[i].ToCharArray();

                if (tempArr.Length == alphasLenght)
                {
                    Console.WriteLine($"Adding {input[i]}.");
                    countOfIngredients++;
                    if (countOfIngredients == 10)
                    {
                        break;
                    }
                }
            }

            string[] ingredients = new string[countOfIngredients];
            int index = 0;

            for (int i = 0; i < input.Length; i++)
            {
                char[] tempArr = input[i].ToCharArray();

                if (tempArr.Length == alphasLenght)
                {
                    ingredients[index] = input[i];
                    index++;
                    if (index == 10)
                    {
                        break;
                    }
                }
            }

            Console.WriteLine($"Made pizza with total of {countOfIngredients} ingredients.");
            Console.WriteLine($"The ingredients are: {string.Join(", ", ingredients)}.");
        }
    }
}
