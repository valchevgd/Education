using System;

namespace P05_WordInPlural
{
    class Program
    {
        static void Main(string[] args)
        {
            string noun = Console.ReadLine();
            string newNoun = null;


            if (noun.EndsWith("y"))
            {
                
                    newNoun = noun.Remove(noun.Length - 1) + "ies";
                
            }
            else if (noun.EndsWith("o") || noun.EndsWith("ch") || noun.EndsWith("s") || noun.EndsWith("sh") || noun.EndsWith("x") || noun.EndsWith("z"))
            {
                newNoun = noun + "es";
            }
            else
            {
                newNoun = noun + "s";
            }

            Console.WriteLine(newNoun);
        }
    }
}
