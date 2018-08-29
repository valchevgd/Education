using System;

namespace P18_DifferentIntegersSize
{
    class Program
    {
        static void Main(string[] args)
        {
            string num = Console.ReadLine();

            sbyte numSB = 0;
            byte numB = 0;
            short numS = 0;
            ushort numUS = 0;
            int numI = 0;
            uint numUI = 0;
            long numL = 0;
            

            bool IsSBite = sbyte.TryParse(num, out numSB);
            bool IsBite = byte.TryParse(num, out numB);
            bool IsShort = short.TryParse(num, out numS);
            bool IsUShort = ushort.TryParse(num, out numUS);
            bool IsInt = int.TryParse(num, out numI);
            bool IsUInt = uint.TryParse(num, out numUI);
            bool IsLong = long.TryParse(num, out numL);
            

            if (IsSBite || IsBite || IsShort || IsUShort || IsInt || IsUInt || IsLong )
            {
                Console.WriteLine($"{num} can fit in:");
            }
           if (IsSBite)
            {
                Console.WriteLine("* sbyte");
            }
            if (IsBite)
            {
                Console.WriteLine("* byte");
            }
             if (IsShort)
            {
                Console.WriteLine("* short");
            }
             if (IsUShort)
            {
                Console.WriteLine("* ushort");
            }
             if (IsInt)
            {
                Console.WriteLine("* int");
            }
            if (IsUInt)
            {
                Console.WriteLine("* uint");
            }
            if (IsLong)
            {
                Console.WriteLine("* long");
            }
             

            try
            {
                long exc = long.Parse(num);
            }
            catch (Exception)
            {

                Console.WriteLine($"{num} can't fit in any type");
            }

        }
    }
}
