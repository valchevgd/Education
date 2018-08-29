using System;

namespace P07_CakeIngredients
{
    class Program
    {
        static void Main(string[] args)
        {
            
            int ingredients = 0;

            while (true)
            {
                string ingredient = Console.ReadLine();
                if ("Bake!" == ingredient)
                {
                    break;
                }
                Console.WriteLine($"Adding ingredient {ingredient}.");
                ingredients++;
            }

            Console.WriteLine($"Preparing cake with {ingredients} ingredients.");
        }
    }
}
