using System;

namespace P02_VaporStore
{
    class Program
    {
        static void Main(string[] args)
        {
            double budget = double.Parse(Console.ReadLine());
            double startBudget = budget;

            while (true)
            {
                string game = Console.ReadLine();

                if (game == "Game Time" || budget == 0)
                {
                    break;
                }

                switch (game)
                {
                    case "OutFall 4":
                        if (budget > 39.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            budget -= 39.99;
                        }
                        else if (budget == 39.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            Console.WriteLine("Out of money!");
                            budget -= 39.99;
                        }
                        else if (budget < 39.99)
                        {
                            Console.WriteLine("Too Expensive");
                        }
                        break;
                    case "CS: OG":
                        if (budget > 15.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            budget -= 15.99;
                        }
                        else if (budget == 15.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            Console.WriteLine("Out of money!");
                            budget -= 15.99;
                        }
                        else if (budget < 15.99)
                        {
                            Console.WriteLine("Too Expensive");
                        }
                        break;
                    case "Zplinter Zell":
                        if (budget > 19.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            budget -= 19.99;
                        }
                        else if (budget == 19.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            Console.WriteLine("Out of money!");
                            budget -= 19.99;
                        }
                        else if (budget < 19.99)
                        {
                            Console.WriteLine("Too Expensive");
                        }
                        break;
                    case "Honored 2":
                        if (budget > 59.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            budget -= 59.99;
                        }
                        else if (budget == 59.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            Console.WriteLine("Out of money!");
                            budget -= 59.99;
                        }
                        else if (budget < 59.99)
                        {
                            Console.WriteLine("Too Expensive");
                        }
                        break;
                    case "RoverWatch":
                        if (budget > 29.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            budget -= 29.99;
                        }
                        else if (budget == 29.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            Console.WriteLine("Out of money!");
                            budget -= 29.99;
                        }
                        else if (budget < 29.99)
                        {
                            Console.WriteLine("Too Expensive");
                        }
                        break;
                    case "RoverWatch Origins Edition":
                        if (budget > 39.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            budget -= 39.99;
                        }
                        else if (budget == 39.99)
                        {
                            Console.WriteLine($"Bought {game}");
                            Console.WriteLine("Out of money!");
                            budget -= 39.99;
                        }
                        else if (budget < 39.99)
                        {
                            Console.WriteLine("Too Expensive");
                        }
                        break;
                    default:
                        Console.WriteLine("Not Found");
                        break;
                }

                
            }

            if (budget > 0)
            {
                double spendMoney = startBudget - budget;
                Console.WriteLine($"Total spent: ${spendMoney:f2}. Remaining: ${budget:f2}");
            }
        }
    }
}
