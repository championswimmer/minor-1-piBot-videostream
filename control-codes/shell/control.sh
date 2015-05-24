#!/bin/bash

# Define the pins

export RT_FWD="/sys/class/gpio/gpio20/value"
export RT_BWD="/sys/class/gpio/gpio21/value"

export LT_FWD="/sys/class/gpio/gpio18/value"
export LT_BWD="/sys/class/gpio/gpio23/value"

rt_fwd() {
	echo 1 > ${RT_FWD}
	echo 0 > ${RT_BWD}
}

rt_bwd() {
	echo 0 > ${RT_FWD}
	echo 1 > ${RT_BWD}
}

lt_fwd() {
	echo 1 > ${LT_FWD}
	echo 0 > ${LT_BWD}
}

lt_bwd() {
	echo 0 > ${LT_FWD}
	echo 1 > ${LT_BWD}
}

stop() {
	echo 0 > ${LT_BWD}
	echo 0 > ${LT_FWD}
	echo 0 > ${RT_FWD}
	echo 0 > ${RT_BWD}
}


opt="${1}"

case ${opt} in
	f) rt_bwd; lt_bwd;
	;;
	b) rt_fwd; lt_fwd;
	;;
	r) lt_fwd; rt_bwd;
	;;
	l) rt_fwd; lt_bwd;
	;;
	s) stop;
	;;
esac


