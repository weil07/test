程序：计算机程序是指为完成特定功能而编写的指令集合

算法特性：
	1.有穷性
	2.确定性
	3.可输入性
	4.输出性
	5.有效性

输出hello world
#include "stdio.h"
main()
{
	printf("hello world");
}

C语言是由函数构成的语言

输出两个数之和
#include "stdio.h"
main()
{
	int a,b,c;
	a=123;
	b=456;
	c=a+b;
	printf("the sum is c=%d\n"c);	
}

变量：用来存储数据的内存空间，变量值为存储空间中的数据值

输出两个数之积
#include "stdio.h"
main()
{
	int a,b,c;
	printf("please input a and b :");
	scanf("%d,%d",&a,&b);
	c=a*b;
	printf("the result is c=%d\n",c);
}

求圆的面积
#include "stdio.h"
#define PI 3.14
main()
{
	float a1;
  int r;
	printf("please input the circle r:");
	scanf("%d",&r);
	a1 = r*r*PI;
	printf("the result is a1=%f\n",a1);
}
