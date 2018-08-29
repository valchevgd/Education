using System;
using System.Numerics;

namespace P16_InstructionSet
{
    class Program
    {
        static void Main(string[] args)
        {
            BigInteger result = 0;

            while (true)
            {
                string opCode = Console.ReadLine();

                if (opCode == "END")
                {
                    break;
                }

                string[] codeArgs = opCode.Split(' ');

                
                switch (codeArgs[0])
                {
                    case "INC":
                        {
                            int operandOne = int.Parse(codeArgs[1]);
                            operandOne++;
                            result += operandOne;
                            break;
                        }
                    case "DEC":
                        {
                            BigInteger operandOne = int.Parse(codeArgs[1]);
                            operandOne--;
                            result += operandOne;
                            break;
                        }
                    case "ADD":
                        {
                            int operandOne = int.Parse(codeArgs[1]);
                            int operandTwo = int.Parse(codeArgs[2]);
                            long sum = operandOne + operandTwo;
                            result += sum;
                            break;
                        }
                    case "MLA":
                        {
                            BigInteger operandOne = long.Parse(codeArgs[1]);
                            BigInteger operandTwo = long.Parse(codeArgs[2]);
                            BigInteger mult = operandOne * operandTwo;
                            result += mult;
                            break;
                        }
                }

                

            }
            Console.WriteLine(result);
        }
    }
}
